/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.Date;
import java.util.List;
import javax.persistence.Basic;
import javax.persistence.CascadeType;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import javax.xml.bind.annotation.XmlRootElement;
import javax.xml.bind.annotation.XmlTransient;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_USUARIO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreUsuario.findAll", query = "SELECT s FROM SipreUsuario s")})
public class SipreUsuario implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "CUSUARIO_CODIGO")
    private String cusuarioCodigo;
    @Column(name = "VUSUARIO_NOM")
    private String vusuarioNom;
    @Column(name = "VUSUARIO_PASS")
    private String vusuarioPass;
    @Column(name = "DUSUARIO_FEC_REG")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dusuarioFecReg;
    @Column(name = "CUSUARIO_EST")
    private Character cusuarioEst;
    @Column(name = "DUSUARIO_FEC_MOD")
    @Temporal(TemporalType.TIMESTAMP)
    private Date dusuarioFecMod;
    @Column(name = "ID_PERFIL")
    private Long idPerfil;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "cusuarioCodigo")
    private List<SiprePlanillaDescuento> siprePlanillaDescuentoList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "cusuarioCodigo")
    private List<SiprePlanillaOtro> siprePlanillaOtroList;
    @OneToMany(cascade = CascadeType.ALL, mappedBy = "cusuarioCodigo")
    private List<SiprePlanilla> siprePlanillaList;

    public SipreUsuario() {
    }

    public SipreUsuario(String cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public String getCusuarioCodigo() {
        return cusuarioCodigo;
    }

    public void setCusuarioCodigo(String cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
    }

    public String getVusuarioNom() {
        return vusuarioNom;
    }

    public void setVusuarioNom(String vusuarioNom) {
        this.vusuarioNom = vusuarioNom;
    }

    public String getVusuarioPass() {
        return vusuarioPass;
    }

    public void setVusuarioPass(String vusuarioPass) {
        this.vusuarioPass = vusuarioPass;
    }

    public Date getDusuarioFecReg() {
        return dusuarioFecReg;
    }

    public void setDusuarioFecReg(Date dusuarioFecReg) {
        this.dusuarioFecReg = dusuarioFecReg;
    }

    public Character getCusuarioEst() {
        return cusuarioEst;
    }

    public void setCusuarioEst(Character cusuarioEst) {
        this.cusuarioEst = cusuarioEst;
    }

    public Date getDusuarioFecMod() {
        return dusuarioFecMod;
    }

    public void setDusuarioFecMod(Date dusuarioFecMod) {
        this.dusuarioFecMod = dusuarioFecMod;
    }

    public Long getIdPerfil() {
        return idPerfil;
    }

    public void setIdPerfil(Long idPerfil) {
        this.idPerfil = idPerfil;
    }

    @XmlTransient
    public List<SiprePlanillaDescuento> getSiprePlanillaDescuentoList() {
        return siprePlanillaDescuentoList;
    }

    public void setSiprePlanillaDescuentoList(List<SiprePlanillaDescuento> siprePlanillaDescuentoList) {
        this.siprePlanillaDescuentoList = siprePlanillaDescuentoList;
    }

    @XmlTransient
    public List<SiprePlanillaOtro> getSiprePlanillaOtroList() {
        return siprePlanillaOtroList;
    }

    public void setSiprePlanillaOtroList(List<SiprePlanillaOtro> siprePlanillaOtroList) {
        this.siprePlanillaOtroList = siprePlanillaOtroList;
    }

    @XmlTransient
    public List<SiprePlanilla> getSiprePlanillaList() {
        return siprePlanillaList;
    }

    public void setSiprePlanillaList(List<SiprePlanilla> siprePlanillaList) {
        this.siprePlanillaList = siprePlanillaList;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (cusuarioCodigo != null ? cusuarioCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreUsuario)) {
            return false;
        }
        SipreUsuario other = (SipreUsuario) object;
        if ((this.cusuarioCodigo == null && other.cusuarioCodigo != null) || (this.cusuarioCodigo != null && !this.cusuarioCodigo.equals(other.cusuarioCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreUsuario[ cusuarioCodigo=" + cusuarioCodigo + " ]";
    }
    
}
