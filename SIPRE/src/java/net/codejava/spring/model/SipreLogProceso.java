/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import java.math.BigDecimal;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_LOG_PROCESO")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreLogProceso.findAll", query = "SELECT s FROM SipreLogProceso s")})
public class SipreLogProceso implements Serializable {
    private static final long serialVersionUID = 1L;
    // @Max(value=?)  @Min(value=?)//if you know range of your decimal fields consider using these annotations to enforce field validation
    @Id
    @Basic(optional = false)
    @Column(name = "LOG_PRO_COD")
    private BigDecimal logProCod;
    private String campo;
    private String tipo;
    private String mensaje;
    private String orden;
    private String estilo;
    private String estado;
    private String nivel;

    public SipreLogProceso() {
    }

    public SipreLogProceso(BigDecimal logProCod) {
        this.logProCod = logProCod;
    }

    public BigDecimal getLogProCod() {
        return logProCod;
    }

    public void setLogProCod(BigDecimal logProCod) {
        this.logProCod = logProCod;
    }

    public String getCampo() {
        return campo;
    }

    public void setCampo(String campo) {
        this.campo = campo;
    }

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public String getMensaje() {
        return mensaje;
    }

    public void setMensaje(String mensaje) {
        this.mensaje = mensaje;
    }

    public String getOrden() {
        return orden;
    }

    public void setOrden(String orden) {
        this.orden = orden;
    }

    public String getEstilo() {
        return estilo;
    }

    public void setEstilo(String estilo) {
        this.estilo = estilo;
    }

    public String getEstado() {
        return estado;
    }

    public void setEstado(String estado) {
        this.estado = estado;
    }

    public String getNivel() {
        return nivel;
    }

    public void setNivel(String nivel) {
        this.nivel = nivel;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (logProCod != null ? logProCod.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreLogProceso)) {
            return false;
        }
        SipreLogProceso other = (SipreLogProceso) object;
        if ((this.logProCod == null && other.logProCod != null) || (this.logProCod != null && !this.logProCod.equals(other.logProCod))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreLogProceso[ logProCod=" + logProCod + " ]";
    }
    
}
