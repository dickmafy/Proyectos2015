/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.util.Date;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Seguridadauditoria.findAll", query = "SELECT s FROM Seguridadauditoria s")})
public class Seguridadauditoria implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "AUD_CODIGO")
    private Integer audCodigo;
    @Column(name = "AUD_ACCION")
    private String audAccion;
    @Column(name = "AUD_FECHA")
    @Temporal(TemporalType.TIMESTAMP)
    private Date audFecha;
    @Column(name = "AUD_RESULTADO_ACCION")
    private String audResultadoAccion;
    @Column(name = "AUD_TABLA")
    private String audTabla;
    @Column(name = "AUD_VALOR_ANTIGUO")
    private String audValorAntiguo;
    @Column(name = "AUD_VALOR_NUEVO")
    private String audValorNuevo;
    @Column(name = "CUSUARIO_CODIGO")
    private String cusuarioCodigo;

    public Seguridadauditoria() {
    }

    public Seguridadauditoria(Integer audCodigo) {
        this.audCodigo = audCodigo;
    }

    public Integer getAudCodigo() {
        return audCodigo;
    }

    public void setAudCodigo(Integer audCodigo) {
        this.audCodigo = audCodigo;
    }

    public String getAudAccion() {
        return audAccion;
    }

    public void setAudAccion(String audAccion) {
        this.audAccion = audAccion;
    }

    public Date getAudFecha() {
        return audFecha;
    }

    public void setAudFecha(Date audFecha) {
        this.audFecha = audFecha;
    }

    public String getAudResultadoAccion() {
        return audResultadoAccion;
    }

    public void setAudResultadoAccion(String audResultadoAccion) {
        this.audResultadoAccion = audResultadoAccion;
    }

    public String getAudTabla() {
        return audTabla;
    }

    public void setAudTabla(String audTabla) {
        this.audTabla = audTabla;
    }

    public String getAudValorAntiguo() {
        return audValorAntiguo;
    }

    public void setAudValorAntiguo(String audValorAntiguo) {
        this.audValorAntiguo = audValorAntiguo;
    }

    public String getAudValorNuevo() {
        return audValorNuevo;
    }

    public void setAudValorNuevo(String audValorNuevo) {
        this.audValorNuevo = audValorNuevo;
    }

    public String getCusuarioCodigo() {
        return cusuarioCodigo;
    }

    public void setCusuarioCodigo(String cusuarioCodigo) {
        this.cusuarioCodigo = cusuarioCodigo;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (audCodigo != null ? audCodigo.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadauditoria)) {
            return false;
        }
        Seguridadauditoria other = (Seguridadauditoria) object;
        if ((this.audCodigo == null && other.audCodigo != null) || (this.audCodigo != null && !this.audCodigo.equals(other.audCodigo))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadauditoria[ audCodigo=" + audCodigo + " ]";
    }
    
}
